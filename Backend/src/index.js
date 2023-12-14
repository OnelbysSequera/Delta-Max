const express = require ('express');
const morgan = require ('morgan');
const exphbs = require ('express-handlebars');

// Initialization
const app = express ();

// Settings
app.set('port', process.env.PORT || 4000);

// Middlewares
app.use(morgan('dev'));

// Global variables


// Routes
app.use(require('./routes'));

// Public


// Starting the server
app.listen(app.get('port'), () => {
    console.log('Server on port', app.get('port'));
});
