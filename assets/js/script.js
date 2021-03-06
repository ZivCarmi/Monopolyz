// ======================================================
// BOARD
// ======================================================

$('.players-creation .create-players').on('click', e => {
  e.preventDefault();

  let $this = $(e.currentTarget);
  let playersInputs = $this.closest('.modal-wrapper').find('.player-row input');
  let players = [];

  // loop on every player input (total of 4)
  playersInputs.each((key, playerInput) => {
    let playerInputVal = $(playerInput).val();
    let allowedPlayerName = /[a-zA-Z0-9א-ת]/;

    // checks match to regex & larger than 1 letter & smaller than 21
    if (allowedPlayerName.test(playerInputVal) && playerInputVal.length > 1 && playerInputVal.length < 21) {
      players.push([key, playerInputVal]);
    }
  });

  axios.post('partials/players-creation/creation.php', {
      players: players
    })
    .then(function (response) {
      console.log(response);
    }).catch(function (error) {
      console.log(error);
    });
});

// ======================================================
// BOARD
// ======================================================