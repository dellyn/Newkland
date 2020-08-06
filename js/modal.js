
const blocks = [...document.getElementsByClassName('win_img')];
const block_pops = [...document.getElementsByClassName('win_modal')];

document.getElementById('win').addEventListener("click",e=> {
  if(e.target.className !== "win_img") return;
  const indexInBlocksArray = blocks.indexOf(e.target);
  if(block_pops[indexInBlocksArray].classList.value.includes("win_modal_active")) {
    block_pops[indexInBlocksArray].classList.remove("win_modal_active");
    return;
  }
  for(let pop of block_pops) {
    pop.classList.remove("win_modal_active");
  }
  block_pops[indexInBlocksArray].classList.add("win_modal_active");
                     

});


