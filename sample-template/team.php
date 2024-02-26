
<section class="content-block">
    <div class="container">
        <div class="heading bottom-space text-center">
            <h2>Learn. <span>Acheive.</span> Admire</h2>
        </div>
        <div class="description text-center">
            <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel. Fat make met can must form into gate. Me we offending prevailed discovery. </p>
        </div>

        <?php $team_query = new WP_User_Query(array('role' => 'Editor')); ?>
        <?php foreach ($team_query->results as $user) : ?>
            <div class="row">

                <div class="col-md-4">
                    <figure class="team-box caption-fade-up top-l-space">
                        <div class="img-block">
                            <?php echo get_avatar(($user->ID)); ?>
                        </div>
                        <figcaption class="team-des-v2">
                            <span class="sub"></span>
                            <strong class="content-title name"><?php echo $user->display_name; ?></strong>
                            <p><?php echo $user->description;?></p>
                        </figcaption>
                    </figure>
                </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>
<section class="content-block">