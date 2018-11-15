 <table class="table table-bordered" style="margin-top:20px">
                    <thead>
                        <tr>
                            <th>Comment</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($get_chat->result() as $chat) { ?>
                            <tr>
                                <td><?php echo $chat->comment; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>


                </table>

