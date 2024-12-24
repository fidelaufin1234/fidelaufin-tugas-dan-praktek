<?php

// Array asosiatif perusahaan teknologi
$companies = [
    [
        "name" => "Apple Inc.",
        "founded" => "1976",
        "founder" => "Steve Jobs, Steve Wozniak, Ronald Wayne",
        "headquarters" => "Cupertino, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/f/fa/Apple_logo_black.svg"
    ],
    [
        "name" => "Microsoft",
        "founded" => "1975",
        "founder" => "Bill Gates, Paul Allen",
        "headquarters" => "Redmond, Washington, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg"
    ],
    [
        "name" => "Google",
        "founded" => "1998",
        "founder" => "Larry Page, Sergey Brin",
        "headquarters" => "Mountain View, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg"
    ],
    [
        "name" => "Facebook",
        "founded" => "2004",
        "founder" => "Mark Zuckerberg",
        "headquarters" => "Menlo Park, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
    ],
    [
        "name" => "Amazon",
        "founded" => "1994",
        "founder" => "Jeff Bezos",
        "headquarters" => "Seattle, Washington, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/a/a9/Amazon_logo.svg"
    ],
    [
        "name" => "IBM",
        "founded" => "1911",
        "founder" => "Charles Ranlett Flint",
        "headquarters" => "Armonk, New York, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/5/51/IBM_logo.svg"
    ],
    [
        "name" => "Intel",
        "founded" => "1968",
        "founder" => "Gordon Moore, Robert Noyce",
        "headquarters" => "Santa Clara, California, USA",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/e/e8/Intel_logo_%282020%29.svg"
    ],
    [
        "name" => "Samsung Electronics",
        "founded" => "1969",
        "founder" => "Lee Byung-chul",
        "headquarters" => "Suwon, South Korea",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/2/24/Samsung_Logo.svg"
    ],
    [
        "name" => "Sony",
        "founded" => "1946",
        "founder" => "Masaru Ibuka, Akio Morita",
        "headquarters" => "Tokyo, Japan",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/1/1a/Sony_logo.svg"
    ],
    [
        "name" => "Tencent",
        "founded" => "1998",
        "founder" => "Pony Ma, Zhang Zhidong",
        "headquarters" => "Shenzhen, China",
        "image" => "https://upload.wikimedia.org/wikipedia/commons/9/91/Tencent_logo.svg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan Teknologi</title>
</head>
<body>
    <h1>Daftar Perusahaan Teknologi</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Tahun Didirikan</th>
            <th>Pendiri</th>
            <th>Kantor Pusat</th>
            <th>Logo</th>
        </tr>
        <?php foreach ($companies as $company) : ?>
            <tr>
                <td><?= $company['name'] ?></td>
                <td><?= $company['founded'] ?></td>
                <td><?= $company['founder'] ?></td>
                <td><?= $company['headquarters'] ?></td>
                <td><img src="<?= $company['image'] ?>" alt="<?= $company['name'] ?> Logo" width="100"></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>