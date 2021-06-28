<?php
if (isset($_POST['save'])) {
    if (empty($_POST['rules'])) {
        echo "Hãy đọc kĩ và ấn đống ý điều khoản!";
    } else {
        $rules = $_POST['rules'];
        echo $rules;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox Form</title>
</head>

<body>

    <form action="" method="POST">
        <p style="width: 400px; height: 100px; overflow: scroll">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque laudantium, provident consequatur, laboriosam error corporis velit quasi harum omnis suscipit vel? Eaque nam debitis necessitatibus nemo soluta cumque sed deleniti magnam alias non sapiente accusamus placeat, assumenda officiis tempore mollitia libero facere maxime illo! Eum reiciendis debitis adipisci officiis in officia enim obcaecati eius iusto facere autem dolorum amet quisquam, architecto eaque dolores fugiat fugit totam. Illum, dolorum sint mollitia reprehenderit, temporibus ullam saepe ipsa officia officiis quas fuga nihil quo earum corrupti eligendi, vel dolore. Ullam consequatur dignissimos, at, doloremque labore rerum dolore maiores alias illum assumenda error minima corporis omnis accusamus porro soluta iste, natus est earum! Non, numquam, tempore, animi quis dignissimos cum aperiam provident impedit iure eveniet est ex! Doloremque quaerat id velit sequi dolorem! Maiores molestias neque beatae suscipit iste error facilis iusto consectetur, ullam repudiandae cum ut aliquam voluptas autem, corporis sapiente sit soluta dignissimos laborum, in obcaecati? Ex reiciendis excepturi cum aperiam minus? At, itaque commodi minima aliquam voluptatibus obcaecati hic nisi enim, eius vero placeat ipsa! Deleniti, culpa! Quibusdam consequatur laboriosam quo sed, facere minima quam, dolores vel esse accusamus sint fuga? Esse omnis, eligendi neque est quasi tempore maiores sapiente doloribus ab harum dicta ut illum nihil voluptatum sint fugit id suscipit mollitia adipisci cum quia. Eum dolorem nostrum nihil nulla quisquam expedita. Quia, nisi provident dolorem labore nesciunt obcaecati incidunt deleniti, alias suscipit vero quis ratione inventore similique. Fugit ipsam facilis, nam voluptatibus nostrum dolore corporis omnis iusto. Dolore amet delectus nostrum illum magnam maiores voluptatum eius aliquam dicta voluptates magni fugit quae sit animi, inventore quos repellendus iste, quia, corrupti dignissimos! Molestiae culpa nihil neque ea, animi quibusdam laborum libero commodi distinctio velit! Modi culpa, illum sapiente laudantium debitis fugit nisi quidem suscipit quaerat recusandae amet dolores quos magnam dolor doloremque minus facilis numquam, dolorum alias ipsa! Rerum pariatur blanditiis rem consectetur nesciunt eveniet magnam itaque dolor eos ut ipsa voluptatum voluptas explicabo quod maiores quidem voluptatibus, hic commodi nemo. Dolor, repudiandae adipisci, obcaecati fugiat corrupti vitae blanditiis, perspiciatis mollitia excepturi quidem nisi quod itaque? Culpa itaque inventore saepe iure temporibus odit officiis unde eaque libero mollitia reprehenderit ratione quos molestias ea iusto ipsum minus voluptate, corrupti facilis dolor. Officia accusamus eius quas, autem inventore necessitatibus facilis ex beatae accusantium veniam. Esse dolorum quas qui eum aut tempora unde, provident aperiam asperiores doloremque facilis dolores soluta sequi placeat voluptates vitae est beatae similique commodi architecto! Voluptate modi vitae, dolores quam sint architecto aliquid, harum incidunt aspernatur illo blanditiis fuga delectus corrupti eligendi, unde quaerat animi. Consequuntur autem illum molestiae praesentium iure animi rerum esse nobis reprehenderit magnam tempore repellendus dolorem quisquam, dolor vero, eos ab magni optio dolore temporibus exercitationem perspiciatis vel. Atque illo odio a eligendi non natus voluptate facilis vitae magni cupiditate doloribus explicabo quae iste, sit adipisci provident nisi maiores at perspiciatis commodi consequatur voluptas. Explicabo asperiores ut temporibus doloribus facilis enim minima sed rerum ad esse! Nam quos voluptates fuga! Dolore nostrum tempora unde tenetur.</p>

        <label for="rules">Đồng ý điều khoản</label>
        <input type="checkbox" name="rules" id="rules" value="yes">
        <input type="submit" name="save" value="save">
    </form>

</body>

</html>