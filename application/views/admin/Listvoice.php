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
													<th>judul</th>
													<th>sound</th>
													<th>keterangan</th>
													<th>album</th>
													<th>aksi</th>
									
												</tr>
											</thead>
											
											<tbody>
												<?php $no=1; foreach($sound as $s):?>
												<tr>
													<!-- <td><?= $no++; ?></td> -->
													<td><?= $s->judul ?></td>
													<td>
														<audio controls>
															<source src="<?php echo base_url(),'/assets/sound/'.$s->sound;?>" type="audio/mpeg">
															<embed height="50" width="100" src="<?php echo base_url(),'/assets/sound/'.$s->sound;?>">
														</audio>

													</td>
													<td><?= $s->keterangan ?></td>
													<td><?= $s->nama_album ?></td>
													
													<td width="250">
											<a href="<?php echo site_url('Datavoice/edit/'.$s->id_voice) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a href='<?php echo site_url('Datavoice/delete/'.$s->id_voice) ?>'
											 class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
													
												</tr>
												<?php endforeach;?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>