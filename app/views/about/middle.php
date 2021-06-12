<div id="middle_about">

    <table>
        <div id="tab_up">
            <tr>
                <?php foreach ($this->entete as $line) { ?>
                    <th><?= $line ?></th>
                <?php } ?>
            </tr>
        </div>
        <div id="tab_down">
            <?php foreach ($this->listes as $line) { ?>
                <tr>
                    <?php for ($i = 0; $i < count($line); $i++) { ?>
                        <td><?= $line[$i] ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </div>
    </table>
</div>