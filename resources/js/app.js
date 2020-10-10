require('./bootstrap');
window.Vue = require('vue');

function initVue() {
  // avvio di Vue sul componente <div id='app'>
  // ModelView, variabile globale app
  const app = new Vue({
    // chiave el su selettore #app cui si monta l'applicazione Vue
    el: '#app',
    // inizializzo le variabili
    data: {
      message: 'Hello World',
      htmlMessage: "Hello<br>World!",

      fname: 'Fabrizio',
      lname: 'Bianco',

      imgJobs: 'img/jobs.png',

      inputFName: '',
      inputLName: '',

      km: 0,
      m: 0

    },
    // inizializzo le funzioni
    methods: {
      sayHello: function() {
        return 'Hello from <br>' + this.fname + ' ' + this.lname;
      },
      getRand: function() {
        // numero random tra 0 e 100
        return Math.floor(Math.random() * 100);
      }
    },
    computed: {
      getCompRand: function() {
        // numero random tra 0 e 100
        return Math.floor(Math.random() * 100);
      },
      fullName: {
        get: function() {
          return this.fname
          + (this.lname ? ' ' + this.lname : '');
          // operatore di assegnazione condizionale (variabile ? se vero : se falso)
        },
        // NB: le funzioni in ingresso prendono il valore del campo di input
        set: function(name) {
          if (name && name.includes(' ')) {
            // array di nome e cognome
            var sname = name.split(' ');
            this.fname = sname[0];
            this.lname = sname[1];
          } else if (name) {
            this.fname = name;
            this.lname = '';
          } else {
            this.fname = this.lname = '';
          }

        }
      }
    },
    watch: {
      km: function (val) {
        this.km = val;
        this.m = val * 1000;
      },
      m: function (val) {
        this.m = val;
        this.km = val / 1000;
      }
    }
  });
}

function init() {
  initVue();
}

$(document).ready(init);
