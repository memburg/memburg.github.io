<style>
    .name {
        width: 100%;
        text-align: center;
        padding: 6 0rem;
        display: flex;

        & div {
            width: 100%;
            align-self: center;
            justify-self: center;

            & h1 {
                font-size: 4rem;
                font-weight: 700;
                letter-spacing: 1.2rem;
                background: linear-gradient(to right,
                        var(--ctp-mocha-mauve),
                        var(--ctp-mocha-blue),
                        var(--ctp-mocha-peach),
                        var(--ctp-mocha-green));
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                text-fill-color: transparent;
                background-size: 500% auto;
                animation: movingBackgroundText 4s linear infinite alternate;
            }

            & h3 {
                line-height: 3rem;
                font-weight: 400;
                font-size: 1.6rem;
                letter-spacing: 1rem;
                color: var(--ctp-mocha-subtext1);
            }
        }
    }

    @keyframes movingBackgroundText {
        0% {
            background-position: 0% 50%;
        }

        100% {
            background-position: 100% 50%;
        }
    }
</style>

<div class="section name">
    <div>
        <h1>Ramb Memburg</h1>
        <h3>automation engineer</h3>
    </div>
</div>