const add_more_fields = document.getElementById('add_more');
let prev_card = document.getElementById('add_here');

add_more_fields.addEventListener("click", addNewDiv);

function addNewDiv() {
  prev_card.innerHTML += '<div class="card">\
    <div class="team-card">\
      <label>Team Name: </label>\
      <input type="text" name="" value="" placeholder="Enter Team Name here">\
      <label>Leader Name: </label>\
      <input type="text" name="" value="" placeholder="Enter Leader Name here">\
      <label>Members Name: </label>\
      <textarea name="name" rows="5" cols="80" placeholder="Enter Members Name here"></textarea>\
    </div>\
  </div>';
}
