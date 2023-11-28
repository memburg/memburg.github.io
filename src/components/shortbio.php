<style>
    .shortbio-container {
        width: 100%;
        max-width: 100%;
        max-height: 100px;

        & .upper-table {
            margin: 0 auto;
            width: 100%;
            max-width: 450px;
            height: inherit;
            table-layout: fixed;

            & tr:first-child {
                height: 100px;
            }

            & .pseudonym {
                width: calc(100% - 100px);
                max-width: calc(100% - 100px);
                color: #f6eeff;

                & .nested-table {
                    height: 100%;
                    width: 100%;

                    & tr {
                        height: 50%;

                        & td {
                            position: relative;
                            width: 100%;

                            & h2 {
                                position: absolute;
                                left: 0;
                                bottom: 0;
                                font-size: 30px;
                            }

                            & .short-description {
                                position: absolute;
                                left: 0;
                                top: 50%;
                                font-size: 12px;
                            }
                        }
                    }
                }
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

<div class="shortbio-container">
    <table class="upper-table">
        <tr>
            <td class="pseudonym">
                <table class="nested-table">
                    <tr>
                        <td>
                            <h2>Ramb Memburg</h2>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label class="short-description">( Hobbyist / Developer / Enthusiast )</label>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="profile-picture"></td>
        </tr>
    </table>
</div>