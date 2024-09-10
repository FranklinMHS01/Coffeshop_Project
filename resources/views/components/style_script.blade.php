<style>
    @font-face {
        font-family: "MadeMountain";
        src: url('./css/font/MADEMountain-Regular.otf');
    }

    @font-face {
        font-family: "LemonMilk";
        src: url('./css/font/LEMONMILK-Bold.otf');
    }

    @font-face {
        font-family: "Overthink";
        src: url('./css/font/Overthink.otf');
    }

    #loader {
        transition: opacity 1s ease-out;
    }
</style>

<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brown: '#6F4E37',
                    light_brown: '#FED8B1',
                    bg_color: '#F4F5F6',
                },
                fontFamily: {
                    poppins: ["Poppins", "sans-serif"],
                    made: ["MadeMountain"],
                    lm: ["LemonMilk"],
                    over: ["Overthink"],
                },
                backgroundImage: {
                    hero: "url(./css/image/hero.png)",
                    hero_2: "url(./css/image/hero-2.png)",
                    bgMobile: "url(./css/image/bg-mobile.png)",
                    cardMenu: "url(./css/image/cardMenu.png)",
                    tea: "url(./css/image/Tea.png)",
                    latte: "url(./css/image/Latte.png)",
                    snack: "url(./css/image/Snack.png)"
                },
                height: {
                    'tb': '36rem',
                }
            }
        }
    }
</script>
