<style>
    .bio {
        width: 100%;
        max-width: 100%;
        margin-top: 36px;
        color: #f6eeff;

        & table {
            margin: 0 auto;
            width: 100%;
            max-width: 450px;
            height: inherit;

            & tr {
                & td:first-of-type {
                    width: 150px;
                }

                & td {
                    height: 70px;
                    font-size: 14px;
                    text-indent: -50px;
                    padding-left: 50px;

                    & .year {
                        font-weight: 300;
                    }
                }
            }

            & .bio-title {
                text-align: left;
                height: 64px;
                text-decoration: underline;
            }
        }
    }
</style>

<div class="bio">
    <table>
        <tr>
            <th class="bio-title">Bio</th>
        </tr>

        <tr>
            <td>
                <label class="year">1998</label>
                Born in Queretaro, Mexico.
            </td>
        </tr>

        <tr>
            <td>
                <label class="year">2020</label>
                Completed the Software Engineering program of the Computer Science faculty at the Autonomous University
                of Queretaro.
            </td>
        </tr>

        <tr>
            <td>
                <label class="year">2020</label>
                Worked at Deloitte.
            </td>
        </tr>

        <tr>
            <td>
                <label class="year">2020 to present</label>
                Working at P\S\L Group.
            </td>
        </tr>
    </table>
</div>