<style>
    nav {
        height: 56px;
        width: 100%;
        max-width: 100%;

        & table {
            margin: 0 auto;
            width: 100%;
            max-width: 540px;
            height: inherit;
            table-layout: fixed;

            & td {
                text-align: center;
                font-size: 14px;

                & a {
                    text-decoration: none;
                    color: var(--ctp-mocha-text);
                }

                & a:hover {
                    cursor: pointer;
                    text-decoration: underline;
                }

                & a:active {
                    color: var(--ctp-mocha-mauve);
                }

                & a:visited {
                    text-decoration: none;
                }
            }
        }
    }
</style>

<nav>
    <table>
        <tr>
            <td><a href="/">RM</a></td>
            <td><a href="#">Bio</a></td>
            <td><a href="#">Experience</a></td>
            <td><a href="#">Projects</a></td>
            <td><a href="#">Contact</a></td>
        </tr>
    </table>
</nav>