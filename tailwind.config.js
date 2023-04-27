/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "app-blue-1": "#0e5394",
                "app-blue-2": "#2286b8",
                "app-pink-1": "#bd13b8",
            },
        },
    },
    plugins: [],
};
