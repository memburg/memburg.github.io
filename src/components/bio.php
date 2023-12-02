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
                    height: 50px;
                    font-size: 14px;
                    position: relative;

                    & .year,
                    .event {
                        position: absolute;
                        left: 0;
                        top: 0;
                    }

                    & .year {
                        font-weight: 400;
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
            <th></th>
        </tr>

        <tr>
            <td><label class="year">1998</label></td>
            <td><label class="event">Born in Queretaro, Mexico.</label></td>
        </tr>

        <tr>
            <td><label class="year">2020</label></td>
            <td>
                <label class="event">Completed the Software Engineering program of the Computer Science faculty at the
                    Autonomous University of Queretaro.</label>
            </td>
        </tr>

        <tr>
            <td><label class="year">2020</label></td>
            <td><label class="event">Worked at Deloitte.</label></td>
        </tr>

        <tr>
            <td><label class="year">2020 to present</label></td>
            <td><label class="event">Working at P\S\L Group.</label></td>
        </tr>
    </table>
</div>