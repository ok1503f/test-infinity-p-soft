// tailwind.config.js
module.exports = {
    mode: "jit",
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    purge: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        "bg-[#E23799]",
        "max-w-[220px]",
        "bg-[#FFF3FA]",
        // Add other dynamic classes here if needed
    ],
    theme: {
        extend: {
            colors: {
                // Add your custom colors here
            },
            fontFamily: {
                kanit: ["Kanit", ""],
            },
        },
    },
    plugins: [],
};
