
var express = require('express'); // Express web server framework
var request = require('request'); // "Request" library
var querystring = require('querystring');
var cookieParser = require('cookie-parser');
var Spotify = require('spotify-web-api-js');
var spotifyApi = new Spotify();


var client_id = 'f201b6c284a44bd6ac11f07430262360'; // Your client id
var client_secret = 'a087e72614b344ca8919c6c79200335f'; // Your secret
var redirect_uri = 'http://localhost:8888/callback'; // Your redirect uri

/**
 * Generates a random string containing numbers and letters
 * @param  {number} length The length of the string
 * @return {string} The generated string
 */
var generateRandomString = function(length) {
  var text = '';
  var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

  for (var i = 0; i < length; i++) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
};

var stateKey = 'spotify_auth_state';

var app = express();

app.use(express.static(__dirname + '/public'))
   .use(cookieParser());

app.get('/login', function(req, res) {

  var state = generateRandomString(16);
  res.cookie(stateKey, state);

  // your application requests authorization
  var scope = 'user-read-private user-read-email playlist-modify-private';
  res.redirect('https://accounts.spotify.com/authorize?' +
    querystring.stringify({
      response_type: 'code',
      client_id: client_id,
      scope: scope,
      redirect_uri: redirect_uri,
      state: state
    }));
});

app.get('/callback', function(req, res) {

  // your application requests refresh and access tokens
  // after checking the state parameter

  var code = req.query.code || null;
  var state = req.query.state || null;
  var storedState = req.cookies ? req.cookies[stateKey] : null;

  if (state === null || state !== storedState) {
    res.redirect('/#' +
      querystring.stringify({
        error: 'state_mismatch'
      }));
  } else {
    res.clearCookie(stateKey);
    var authOptions = {
      url: 'https://accounts.spotify.com/api/token',
      form: {
        code: code,
        redirect_uri: redirect_uri,
        grant_type: 'authorization_code'
      },
      headers: {
        'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64'))
      },
      json: true
    };

    request.post(authOptions, function(error, response, body) {
      if (!error && response.statusCode === 200) {

        var access_token = body.access_token,
            refresh_token = body.refresh_token;

        var options = {
          url: 'https://api.spotify.com/v1/me',
          headers: { 'Authorization': 'Bearer ' + access_token },
          json: true
        };

        // use the access token to access the Spotify Web API
        request.get(options, function(error, response, body) {
          console.log(body);
        });

        // we can also pass the token to the browser to make requests from there
        res.redirect('/#' +
          querystring.stringify({
            access_token: access_token,
            refresh_token: refresh_token
          }));
        spotifyApi.setAccessToken(access_token);
      } else {
        res.redirect('/#' +
          querystring.stringify({
            error: 'invalid_token'
          }));
      }
    });
  }
});

app.get('/refresh_token', function(req, res) {

  // requesting access token from refresh token
  var refresh_token = req.query.refresh_token;
  var authOptions = {
    url: 'https://accounts.spotify.com/api/token',
    headers: { 'Authorization': 'Basic ' + (new Buffer(client_id + ':' + client_secret).toString('base64')) },
    form: {
      grant_type: 'refresh_token',
      refresh_token: refresh_token
    },
    json: true
  };

  request.post(authOptions, function(error, response, body) {
    if (!error && response.statusCode === 200) {
      var access_token = body.access_token;
      res.send({
        'access_token': access_token
      });
    }
  });
});

app.get('/search', function(req, res){
    var access_token = spotifyApi.getAccessToken();
    var searchquery = "adele";
    var options = {
        url: 'https://api.spotify.com/v1/search?q=' + searchquery + '&type=album,artist,track',
        headers: { 'Authorization': 'Bearer ' + access_token },
        json: true
    };

    // use the access token to access the Spotify Web API
    request.get(options, function(error, response, body) {
        console.log(JSON.stringify(body));
    });;
});

app.get('/getsong', function(req, res){
    var access_token = spotifyApi.getAccessToken();
    var songid = "3n3Ppam7vgaVa1iaRUc9Lp";
    var options = {
        url: 'https://api.spotify.com/v1/tracks/'+songid,
        headers: { 'Authorization': 'Bearer ' + access_token },
        json: true
    };

    // use the access token to access the Spotify Web API
    request.get(options, function(error, response, body) {
        console.log(JSON.stringify(body));
    });;
});


app.get('/addsongtoplaylist', function(req, res){
    var access_token = spotifyApi.getAccessToken();
    var userid = "1247875934"
    var playlistid = "3GdUJ8xdoUSrZRpUbOUIKj";
    var songid = "spotify:track:4iV5W9uYEdYUVa79Axb7Rh,spotify:track:1301WleyT98MSxVHPZCA6M";
    var options = {
        url: 'https://api.spotify.com/v1/users/1247875934/playlists/3GdUJ8xdoUSrZRpUbOUIKj/tracks?&uris=spotify%3Atrack%3A4iV5W9uYEdYUVa79Axb7Rh',
        headers: { 'Authorization': 'Bearer ' + access_token },
        json: true
    };

    // use the access token to access the Spotify Web API
    request.post(options, function(error, response, body) {
        console.log(JSON.stringify(body));
    });;
});

console.log('Listening on 8888');
app.listen(8888);
