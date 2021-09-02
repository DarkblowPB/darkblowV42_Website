<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="playtime_events_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th width="5%">No.</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th>Title</th>
                            <th width="15%">Playtime (Seconds)</th>
                            <th width="15%">Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1; foreach ($playtime as $row) : ?>
                                <tr>
                                    <td><?php echo $num ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDate2($row['start_date'])[0].'-'.$this->eventslogin->ConvertDate2($row['start_date'])[1].'-'.$this->eventslogin->ConvertDate2($row['start_date'])[2].' '.$this->eventslogin->ConvertDate2($row['start_date'])[3].':'.$this->eventslogin->ConvertDate2($row['start_date'])[4] ?></td>
                                    <td><?php echo $this->eventslogin->ConvertDate2($row['end_date'])[0].'-'.$this->eventslogin->ConvertDate2($row['end_date'])[1].'-'.$this->eventslogin->ConvertDate2($row['end_date'])[2].' '.$this->eventslogin->ConvertDate2($row['end_date'])[3].':'.$this->eventslogin->ConvertDate2($row['end_date'])[4] ?></td>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo number_format($row['seconds_target'], '0',',','.') ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Menu
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a href="javascript:void(0)" class="dropdown-item">Details</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php $num++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>