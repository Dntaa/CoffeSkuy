/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
export default {
    theme: {
        extend: {
            fontFamily: {
                poppins: ["Poppins", "sans-serif"],
                dancingScript: ["Dancing Script", "cursive"],
            },
        },
    },
};
