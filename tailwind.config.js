import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1.5rem',
                sm: '2rem',
                lg: '3rem',
                xl: '4rem',
                '2xl': '5rem',
            },
            screens: {
                '2xl': '1320px',
            },
        },
        extend: {
            colors: {
                ink:        '#130C05',
                soot:       '#271808',
                espresso:   '#442C0C',
                mahogany:   '#5F3C11',
                bronze:     '#774D15',
                copper:     '#A5691C',
                amber:      '#C27C21',
                gold:       '#EE9928',
                'gold-2':   '#E09026',
                bone:       '#F7F3EC',
                ivory:      '#EDE6D6',
            },
            fontFamily: {
                display: ['"Fraunces"', 'ui-serif', 'Georgia', 'serif'],
                sans:    ['"Inter"', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                'display-xl': ['clamp(3rem, 7vw, 6.5rem)',  { lineHeight: '0.95', letterSpacing: '-0.025em' }],
                'display-lg': ['clamp(2.5rem, 5.5vw, 5rem)', { lineHeight: '1.0',  letterSpacing: '-0.022em' }],
                'display-md': ['clamp(2rem, 4vw, 3.5rem)',   { lineHeight: '1.05', letterSpacing: '-0.018em' }],
                'display-sm': ['clamp(1.5rem, 3vw, 2.25rem)',{ lineHeight: '1.15', letterSpacing: '-0.012em' }],
                'eyebrow':    ['0.75rem', { lineHeight: '1.2', letterSpacing: '0.18em' }],
            },
            letterSpacing: {
                'tightest': '-0.03em',
                'eyebrow':  '0.18em',
            },
            maxWidth: {
                'reading': '68ch',
            },
            transitionTimingFunction: {
                'ease-out-expo': 'cubic-bezier(0.22, 1, 0.36, 1)',
            },
            keyframes: {
                'fade-up': {
                    '0%':   { opacity: '0', transform: 'translateY(24px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                'shimmer': {
                    '0%':   { backgroundPosition: '-200% 0' },
                    '100%': { backgroundPosition: '200% 0' },
                },
            },
            animation: {
                'fade-up': 'fade-up 0.8s cubic-bezier(0.22, 1, 0.36, 1) both',
            },
            backgroundImage: {
                'grain': "url(\"data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='160' height='160'><filter id='n'><feTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='2' stitchTiles='stitch'/><feColorMatrix values='0 0 0 0 1  0 0 0 0 1  0 0 0 0 1  0 0 0 0.06 0'/></filter><rect width='100%' height='100%' filter='url(%23n)'/></svg>\")",
            },
        },
    },

    plugins: [forms, typography],
};
