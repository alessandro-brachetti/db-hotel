Vue.config.devtools = true;

var app = new Vue ({
  el: '#root',
  data: {
  stanze: [],
  stanza: null,
  },

  created () {
    axios.get('http://localhost:8888/db-hotel/php/stanze.php')
      .then((response) => {
        console.log(response);
        this.stanze = response.data.response;
      });
  },
  methods: {
    getInfo: function(id) {
      axios.get('http://localhost:8888/db-hotel/php/stanze.php?id=' + id)
        .then((response) => {
          this.stanza = response.data.response[0];
          console.log(this.stanza);
        });
    }
  }

})
