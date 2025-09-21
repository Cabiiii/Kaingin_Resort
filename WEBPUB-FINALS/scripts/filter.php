<script>
document.querySelector("#filter-sidebar form").addEventListener("submit", function(e) {
  e.preventDefault();

  let maxPrice = parseInt(document.querySelector("#price").value);
  let capacity = document.querySelector("#capacity").value;
  let types = Array.from(document.querySelectorAll('input[name="type"]:checked'))
                   .map(cb => cb.value);

  document.querySelectorAll(".info-con[data-type]").forEach(card => {
    let price = parseInt(card.getAttribute("data-price"));
    let minCap = parseInt(card.getAttribute("data-min-capacity"));
    let maxCap = parseInt(card.getAttribute("data-max-capacity"));
    let type = card.getAttribute("data-type");

    let show = true;

    if (price > maxPrice) show = false;

    if (capacity) {
      let [filterMin, filterMax] = capacity.split("-").map(Number);

      if (maxCap < filterMin || minCap > filterMax) {
        show = false;
      }
    }

    if (types.length > 0 && !types.includes(type)) show = false;

    card.style.display = show ? "block" : "none";
  });
});
</script>