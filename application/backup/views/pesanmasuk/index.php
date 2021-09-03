 <div class="row">
                <div class="col-xs-12">  
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Pesan masuk dari pengguna aplikasi</h3>
                 
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class='table-responsive'>
                  <table id="example1" class="table table-bordered table-striped" id="example2">
                    <thead>
                      <tr>
                        <th style='width:40px'>No</th>
                        <th>Nama Pengguna</th>
                        <th>Waktu Pesan</th>
                        <th>Status Pesan</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                  <?php 
                    $no = 1;
                    foreach ($record as $row){
                      $status = $row['STATUS'] == "0" ? "<b>Pesan Belum Dibalas</b>" : "<b>Pesan sudah dibalas</b>";
                      $date = date('d-m-Y H:i',strtotime($row['created_date']));
                    echo "<tr><td>$no</td>
                              <td>$row[full_name]</td>
                              <td>$date</td>
                              <td>$status</td>
                              <td><center>
                                <a style='margin-right:3px' class='btn btn-info btn-xs' title='Lihat Pesan' href='".base_url().$this->uri->segment(1)."/detail_pesan_masuk/$row[id_pesan]'> Lihat Pesan</a>";
                               
                              echo "</center></td>
                          </tr>";
                      $no++;
                    }
                  ?>
                  </tbody>
                </table></div>
              </div>
              </div>
              </div>
              
</div>
