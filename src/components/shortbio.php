<style>
    div {
        width: 100%;
        max-width: 100%;

        & table {
            margin: 0 auto;
            width: 100%;
            max-width: 430px;
            height: inherit;
            table-layout: fixed;

            & tr:first-child {
                height: 100px;
            }

            & .pseudonym {
                width: calc(100% - 100px);
                font-size: 30px;
                color: #f6eeff;
            }

            & .profile-picture {
                width: 100px;
                background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/8f/Gustave_Courbet_-_Le_D%C3%A9sesp%C3%A9r%C3%A9_%281843%29.jpg');
                background-repeat: no-repeat;
                background-position: center center;
                border-radius: 100%;
                border: solid 2px #fff;
            }
        }
    }
</style>

<div>
    <table>
        <tr>
            <td class="pseudonym">
                <h2>Ramb Memburg</h2>
            </td>
            <td class="profile-picture"></td>
        </tr>
        <tr>
            <td>
                ( Hobbyist / Developer / Enthusiast)
            </td>
        </tr>
    </table>
</div>