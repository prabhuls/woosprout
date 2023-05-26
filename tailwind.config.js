import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Fira Sans", ...defaultTheme.fontFamily.sans],
                serif: ["Bree Serif", ...defaultTheme.fontFamily.serif],
            },
        },
    },

    daisyui: {
        themes: [
            {
                woosprout: {
                    primary: "#2ea530",
                    secondary: "#073b3a",
                    accent: "#ddb771",
                    neutral: "#021431",
                    "base-100": "#FFFFFF",
                    info: "#93E6FB",
                    success: "#80CED1",
                    warning: "#EFD8BD",
                    error: "#E58B8B",
                },
            },
        ],
    },

    plugins: [forms, require('@tailwindcss/typography'), require("daisyui")],
};
