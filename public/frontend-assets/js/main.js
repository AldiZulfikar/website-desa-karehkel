(() => {
    const dataSection = document.querySelector(".data-section"),
        tabsContainer = document.querySelector(".data-tabs");

    tabsContainer.addEventListener("click", (event) => {
        if (
            event.target.classList.contains("tab-item") &&
            !event.target.classList.contains("active")
        ) {
            const target = event.target.getAttribute("data-target");
            tabsContainer.querySelector(".active").classList.remove("active");
            event.target.classList.add("active");
            dataSection
                .querySelector(".tab-content.active")
                .classList.remove("active");
            dataSection.querySelector(target).classList.add("active");
        }
    });
})();
