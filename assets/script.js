let btnMore = document.querySelector(".btn-more");
let ct = document.querySelector(".ct");

// let hiddenImg = document.querySelectorAll(".hidden-img");
btnMore.addEventListener("click", () => {
	{
		ct.style.display = "inline-block";

		btnMore.style.display = "none";
	}
});
