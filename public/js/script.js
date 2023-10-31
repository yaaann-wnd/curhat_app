const themeToggleDarkIcon = document.getElementById("dark-icon");
const themeToggleLightIcon = document.getElementById("light-icon");
const themeToggleBtn = document.getElementById("theme-toggle");

const tombol_tambah = document.getElementById("tombol-tambah");
const tombol_tutup = document.getElementById("tombol-tutup-tambah-wrapper");
const tambah_wrapper = document.getElementById("tambah-wrapper");

// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}


themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

tombol_tambah.addEventListener("click", () => {
    tambah_wrapper.dataset.status = "active";
});

tombol_tutup.addEventListener("click", () => {
    tambah_wrapper.dataset.status = "inactive";
});
