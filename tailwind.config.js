/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],
    theme: {
        extend: {},
        fontFamily: {
            raleway: ["Raleway", "system-ui"],
            inter: ["Inter", "system-ui"],
            roboto: ["Roboto", "system-ui"],
        },
    },
    plugins: [],
};
