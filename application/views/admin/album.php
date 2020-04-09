<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Hamzanwadi Voice</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-striped table-hover" >
											<thead>
												<tr>
													<!-- <th>#</th> -->
													<th>nama album</th>
													<th>list lagu</th>
													
													<!-- <th>aksi</th> -->
									
												</tr>
											</thead>
											
											<tbody>
												<?php foreach($album as $s):?>
												<tr>
                                                    <td><?= $s->nama_album?></td>
                                                    <td><a href="<?php echo site_url('Album/viewalbum/'.$s->id) ?>"
											 class="btn btn-small"><i class="fas fa-list"></i> Lihat list album</a></td>
													<!-- <td width="250">
													
											<a href="<?php echo site_url('Datavoice/edit/'.$s->id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a href='<?php echo site_url('Datavoice/delete/'.$s->id) ?>'
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td> -->
													
												</tr>
                                                <?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>