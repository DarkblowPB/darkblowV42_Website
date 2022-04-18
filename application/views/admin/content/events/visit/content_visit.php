<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <table id="visit_table" class="table table-borderless table-responsive-lg table-responsive-md table-responsive-sm text-center">
                        <thead class="bg-primary">
                            <th>No.</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Event Title</th>
                            <th>Checks</th>
                            <th>Reward</th>
                            <th>Duration</th>
                            <th>Menu</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            foreach ($this->visit->GetAllVisitEvents() as $row) : ?>
                                <tr>
                                    <td>
                                        <= $num ?>
                                    </td>
                                    <td>
                                        <?= $this->lib->ConvertDate($row['start_date'])[2] . // Days
                                            '-' . $this->lib->ConvertDate($row['start_date'])[1] . // Month
                                            '-' . '20' . $this->lib->ConvertDate($row['start_date'])[0] . // Years
                                            ' ' . $this->lib->ConvertDate($row['start_date'])[3] . // Hours
                                            ':' . $this->lib->ConvertDate($row['start_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <?= $this->lib->ConvertDate($row['end_date'])[2] . // Days
                                            '-' . $this->lib->ConvertDate($row['end_date'])[1] . // Month
                                            '-' . '20' . $this->lib->ConvertDate($row['end_date'])[0] . // Years
                                            ' ' . $this->lib->ConvertDate($row['end_date'])[3] . // Hours
                                            ':' . $this->lib->ConvertDate($row['end_date'])[4] // Minutes
                                        ?>
                                    </td>
                                    <td>
                                        <= $row['title'] ?>
                                    </td>
                                    <td>
                                        <= $row['checks'] ?>
                                    </td>
                                    <td>
                                        <= $row['good1'] ?>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            <?php $num++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>