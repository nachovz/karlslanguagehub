$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  
  var i;
  
  $(".koitekok_font")
    .filter(function(index) {
        return true;
    }).html(function(index, content){
        var letterArray = content.split("");
        for(i = 0; i < letterArray.length; i++) {
            if(pronunciation[letterArray[i]] !== null) {
                var para = document.createElement("a");
                para.setAttribute("data-toggle", "tooltip");
                para.setAttribute("data-original-title", pronunciation[letterArray[i]]);
            } else {
                
            }
        }
    });
});

var pronunciation = {
    "Y": "/eɪ/",
    "I": "/ɔɪ/",
    "U": "/oʊ/",
    "e": "/ə/",
    "E": "/ɛ/",
    "i": "/ɪ/",
    "y": "/i/",
    "o": "/o/",
    "u": "/u/",
    "s": "/ʃ/, /s/ before vowels",
    "z": "/ʒ/, /z/ before vowels",
    "T": "/tʃ/, /ts/ before vowels",
    "D": "/dʒ/, /dz/ before vowels",
    "F": "/θ/",
    "V": "/ð/",
    "p": "/p/",
    "b": "/b/",
    "t": "/t/",
    "d": "/d/",
    "k": "/k/",
    "g": "/g/",
    "f": "/f/",
    "v": "/v/",
    "K": "/ç/",
    "G": "/ʝ/",
    "l": "/l/",
    "m": "/m/",
    "r": "/ɾ/",
    "w": "/w/",
    "j": "/j/",
    "x": "/ʔ/"
};
