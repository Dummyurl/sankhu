console.log(feature.properties);
var pop='';

pop +='<table class="table-bordered">';
pop +='<thead><tr>';

for(i=0;i<nep.length;i++){

  // console.log(nep[i].nepali_lang);
pop += '<td>'+nep[i].nepali_lang+'</td>';




}
pop +='</tr></thead>';


pop +='<tbody><tr>';

for(i=0;i<nep.length;i++){

      pop +='<td>'+ feature.properties['a'+i] +'</td>';



}

 pop +='</tr></tbody>';

  pop +='</table>';

//console.log(pop);
layer.bindPopup(pop);
