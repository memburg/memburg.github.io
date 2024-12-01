<style>
    .front-image {
        display: flex;
        justify-content: center;
        height: 40rem;

        & textarea {
            resize: none;
            width: 218px;
            height: 246px;
            align-self: center;
            background-color: transparent;
            color: white;
            outline: none;
            border: none;
            cursor: inherit;
            font-size: 1.4rem;
            line-height: 1.4rem;
            letter-spacing: -3px;
            overflow: hidden;

            background: linear-gradient(to right,
                    var(--ctp-frappe-sapphire),
                    var(--ctp-macchiato-teal),
                    var(--ctp-latte-rosewater),
                    var(--ctp-frappe-sky));

            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-fill-color: transparent;
            background-size: 500% auto;
            animation: movingBackgroundText 2s linear infinite alternate;
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

<div class="section front-image">
    <textarea id="movie" readonly></textarea>
</div>