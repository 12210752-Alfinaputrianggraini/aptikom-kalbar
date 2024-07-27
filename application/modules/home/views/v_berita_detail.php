<div class="inner-page-banner-area" style="background-image: url('<?= base_url() ?>?assets/img/banner/5.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1><?= $data->judul ?></h1>
            <ul>
                <li><a href="#">Home</a> -</li>
                <li>Berita</li>
            </ul>
        </div>
    </div>
</div>

<div class="news-page-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                <div class="row">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="news-box">
                            <div class="news-img-holder">
                                <img src="<?php echo base_url() . './assets/images/' . $data->gambar ?>" class="img-responsive" alt="research">
                                <ul class="news-date1">
                                    <li><?php echo date('d M', strtotime($data->tgl_post)); ?></li>
                                    <li><?php echo date('Y', strtotime($data->tgl_post)); ?></li>
                                </ul>
                            </div>
                            <h2 class="title-default-left-bold"><a href="#"><?= $data->judul ?></a></h2>
                            <ul class="title-bar-high news-comments">
                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span>By</span> <?= $data->nama_user ?></a></li>
                                <li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i><?= $data->nama_kategori ?></a></li>
                                <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i><span><?= $data->lihat ?></span> </a></li>
                            </ul>
                            <p> <?php echo ($data->isi_artikel) ?></p>

                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Kategori Artikel</h3>
                            <ul class="sidebar-categories">


                                <?php
                                $query = $this->db->get('tbl_kategori');
                                foreach ($query->result() as $row) :
                                ?>
                                    <li><a href="<?php echo base_url() . 'kategori-artikel-' . $row->slug_kategori . '.js' ?>">
                                            <?php echo strtoupper($row->nama_kategori); ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <div class="sidebar-box-inner">
                            <h3 class="sidebar-title">Latest Posts</h3>
                            <div class="sidebar-latest-research-area">
                                <ul>




                                    <?php
                                    foreach ($latepost_artikel->result() as $row) :
                                    ?>
                                        <li>
                                            <div class="latest-research-img">
                                                <a href="<?php echo base_url() . 'artikel-detail-' . $row->slug . '.js' ?>"><img src="<?php echo base_url() . './assets/images/' . $row->gambar ?>" class="img-responsive" alt="skilled"></a>
                                            </div>
                                            <div class="latest-research-content">
                                                <h4> <?php echo date('d M Y', strtotime($row->tgl_post)); ?></h4>
                                                <p><?= $row->judul ?></p>
                                            </div>
                                        </li>

                                    <?php endforeach; ?>



                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>