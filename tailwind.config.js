import colors from 'tailwindcss/colors'
import defaultTheme from 'tailwindcss/defaultTheme'

const navyColor = {
    50: "#E7E9EF",
    100: "#C2C9D6",
    200: "#A3ADC2",
    300: "#697A9B",
    400: "#5C6B8A",
    450: "#465675",
    500: "#384766",
    600: "#313E59",
    700: "#26334D",
    750: "#222E45",
    800: "#202B40",
    900: "#192132",
};

const primaryAlimni = {
    50: "#FAEDE7",
    100: "#F5D7C2",
    200: "#EFB692",
    300: "#E89664",
    400: "#E27B3F",
    450: "#DA6E30",
    500: "#D66324",
    600: "#D2691E", // Acuan
    700: "#B45A1A",
    750: "#9D4F17",
    800: "#874514",
    900: "#69350F",
};

const secondaryAlimni = {
    50: "#FFF9F3",
    100: "#FFF1E3",
    200: "#FFE7D0",
    300: "#FFDCBB",
    400: "#FFD3AB",
    450: "#FFC99A",
    500: "#FFC08C",
    600: "#FFE8D1", // Acuan
    700: "#E5D1BD",
    750: "#CCBAA9",
    800: "#B3A395",
    900: "#8A7B70",
};

const customColors = {
    navy: navyColor,
    "slate-150": "#E9EEF5",
    "primary-alimni": primaryAlimni,
    "secondary-alimni": secondaryAlimni,
    primary: primaryAlimni[600],
    "primary-focus": primaryAlimni["700"],
    secondary: secondaryAlimni[600],
    "secondary-light": secondaryAlimni[300],
    "secondary-focus": secondaryAlimni[700],
    "accent-light": primaryAlimni[400],
    accent: primaryAlimni[600],
    "accent-focus": primaryAlimni[700],
    info: colors.sky["500"],
    "info-focus": colors.sky["600"],
    success: colors.emerald["500"],
    "success-focus": colors.emerald["600"],
    warning: "#ff9800",
    "warning-focus": "#e68200",
    error: "#ff5724",
    "error-focus": "#f03000",
};


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./src/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./resources/**/*.{php,html,js,jsx,ts,tsx,vue}",
        "./storage/framework/views/*.php",
    ],
    darkMode: "class",
    theme: {
        extend: {
            fontFamily: {
                sans: ["Poppins", ...defaultTheme.fontFamily.sans],
                inter: ["Inter", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                tiny: ["0.625rem", "0.8125rem"],
                "tiny+": ["0.6875rem", "0.875rem"],
                "xs+": ["0.8125rem", "1.125rem"],
                "sm+": ["0.9375rem", "1.375rem"],
            },
            colors: { ...customColors },
            opacity: {
                15: ".15",
            },
            spacing: {
                4.5: "1.125rem",
                5.5: "1.375rem",
                18: "4.5rem",
            },
            boxShadow: {
                soft: "0 3px 10px 0 rgb(48 46 56 / 6%)",
                "soft-dark": "0 3px 10px 0 rgb(25 33 50 / 30%)",
            },
            zIndex: {
                1: "1",
                2: "2",
                3: "3",
                4: "4",
                5: "5",
            },
            keyframes: {
                "fade-out": {
                    "0%": {
                        opacity: 1,
                        visibility: "visible",
                    },
                    "100%": {
                        opacity: 0,
                        visibility: "hidden",
                    },
                },
            },
        },
    },
    corePlugins: {
        textOpacity: false,
        backgroundOpacity: false,
        borderOpacity: false,
        divideOpacity: false,
        placeholderOpacity: false,
        ringOpacity: false,
    },
}
