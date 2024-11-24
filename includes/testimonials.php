<?php
function truncateComment($comment, $maxLength = 108) {
    if (strlen($comment) > $maxLength) {
        $truncated = substr($comment, 0, $maxLength);
        // Find the position of the last space in the truncated string
        $lastSpace = strrpos($truncated, ' ');
        if ($lastSpace !== false) {
            $truncated = substr($truncated, 0, $lastSpace);
        }
        return $truncated . "...";
    }
    return $comment;
}
?>
<section style="background-position: center 0px;" class="testimonials text-center">
    <div class="container">
        <h2 class="testimonials__heading">Here’s what our customers have to say about us</h2>
        <div class="underline"></div>

        <div class="testimonials__container owl-testimonial owl-carousel owl-theme">

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Jake Hollands</h4>
                <?php $comment_1 = "Claire has been excellent so far. Really enjoying my lessons and seeing progress."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_1); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Olivia Shaw</h4>
                <?php $comment_2 = "Claire is very friendly and patient. Makes you feel really relaxed and I am enjoying my lessons with Claire so far! She is very knowledgable and clear at explaining everything. I look forward to more lessons in the future."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_2); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">David Neal</h4>
                <?php $comment_3 = "I've only had two flute lessons, one with Claire and one with Kathy. Both very professional and understanding. I felt at ease and welcomed. I shall continue to attend."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_3); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Chon Seng Lou</h4>
                <?php $comment_4 = "I really enjoyed my first lesson at Silverwood music School. I felt I was part of a family as soon as I walked through the door. Just the right atmosphere to help me improve my Flute playing. Looking forward to doing exams here too!"; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_4); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>


            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Karolina Nemeth</h4>
                <?php $comment_5 = "Great tutor! To the point. Very interesting. Interactive. Encouraging."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_5); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Ken Baker</h4>
                <?php $comment_6 = "Great tutor Cathy is. I learnt a lot in my first lesson."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_6); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Stuart Crump</h4>
                <?php $comment_7 = "I am highly satisfied, am glad I started to take lessons with this school, I am more confident and getting better every lesson."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_7); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Eri Kikkawa</h4>
                <?php $comment_8 = "Claire, thank you for your contact I was looking forward to our first lesson and was not disappointed. I loved every minute of it. Thank you."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_8); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Lewis McDonald</h4>
                <?php $comment_9 = "My experience with Silverwood Music School has been excellent. I have been having lessons with Martin from her school and as a total beginner its been amazing - only 4 lessons in but Martin is incredibly patient and I am really enjoying myself."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_9); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Caroline Clough</h4>
                <?php $comment_10 = "I am taking singing lessons with Claire and she is an exceptional teacher. She really puts you at ease and gives great instruction, and I am extremely happy with the lessons that I am receiving."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_10); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Ricardo Rodriguez Nunez</h4>
                <?php $comment_11 = "Claire has been excellent with my eight year old daughter, Claire is really kind and patience and my daughter really looks forward to her lessons and is making great progress."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_11); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Joshua Comrie</h4>
                <?php $comment_12 = "Great teacher. Would definitely recommend."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_12); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">David Allen</h4>
                <?php $comment_13 = "Claire is a very kind person and, from the moment you meet her, she puts you completely at ease. She is extremely knowledgeable in all things musical and is supremely confident and clearly borne from experience. She has given me, a relatively poor singer and complete novice to singing in a choir, sufficient confidence within a matter of six weeks to sing in the bass section of a very experienced 90 strong choir, ( 15 different songs in a high profile Minster venue). Without Claire, this would have been an impossible task. I am indebted to her for opening up new horizons, enabling me to share the joyous feelings that singing brings to many."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_13); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Keely Whitehead</h4>
                <?php $comment_14 = "Claire has been absolutely fantastic with my daughter, I'm so relieved I've finally found a great music teacher who sees the potential in students and has the drive to progress them."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_14); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Sulaiman Ahmed</h4>
                <?php $comment_15 = "I highly recommend this teacher. My children are really enjoying their lessons."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_15); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Alison Wilson</h4>
                <?php $comment_16 = "Claire is an excellent, very experienced tutor. My children really enjoy and look forward to their weekly lessons and are making great progress. Highly recommend."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_16); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Nagham Halabi</h4>
                <?php $comment_17 = "Hi… I like this music school a lot. The bigger music schools are too big and not so personal. This one is perfect with the best teachers and all very well qualified. The lessons are not cancelled and the teachers care."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_17); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

            <div class="item testimonials__item">
                <img class="testimonials__icon" src="images/testimonials-icon.png">
                <h4 class="testimonials__title">Zhengxian Wang</h4>
                <?php $comment_18 = "Claire is a very nice and good tutor. She is responsible for teaching knowledge and very kind and friendly. I feel relaxed and excited when I can learn new knowledge from her every week. She will also help me to buy professional study books and relative facilities, which is convenient for me."; ?>
                <p class="testimonials__comment"><?php echo truncateComment($comment_18); ?></p>
                <i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i><i class="testimonials__star fa-solid fa-star"></i>
            </div>

        </div>

        <a class="button testimonials__btn" href="/testimonials/">VIEW ALL</a>

    </div>
</section>