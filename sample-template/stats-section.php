<style>
    .stats-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat {
        width: 30%;
        /* تغییر اعمال شده */
        text-align: center;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .stat h3 {
        margin: 0 0 5px;
    }

    .stat span {
        font-weight: bold;
        font-size: 1.2em;
    }
</style>



<div class="stats-section">
    <div class="stat">
        <h3>Number of Posts </h3>
        <span id="post-count"><?php echo wp_count_posts()->publish ?> </span>
    </div>
    <div class="stat">
        <h3>Number of users</h3>
        <span id="user-count"><?php $count_user = count_users();
                                echo $count_user['total_users'];  ?> </span>
    </div>
    <div class="stat">
        <h3>number of comments</h3>
        <span id="comment-count"><?php $comments_count = wp_count_comments();
                                    echo $comments_count->approved; ?></span>
    </div>
</div>