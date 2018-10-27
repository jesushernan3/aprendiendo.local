let opened = null;
const toggleVisibility = e => e.classList.toggle("show");

const handleDropdown = e => {
  const clickedItem = e.parentElement.lastChild.previousSibling;

  toggleVisibility(clickedItem);

  if (!opened) {
    opened = clickedItem;
  } else if (opened == clickedItem) {
    opened = null;
  } else {
    toggleVisibility(opened);
    opened = clickedItem;
  }
};

const handleClick = e => {
  if (e.target.className.includes("dropDown")) {
    handleDropdown(e.target);
  } else if (opened) {
    toggleVisibility(opened);
    opened = null;
  }
};

document.addEventListener("click", handleClick);
