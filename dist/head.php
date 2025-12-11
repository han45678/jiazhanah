<?php
$data = [
    'src' => 'https://jiazhanah.tw/',
    'title' => '佳展安和｜北外環5分鐘｜官網',
    'description' => '全聯當鄰居｜安和路超值坪價',
    'keyword' => '佳展安和,佳展建設,安南區建案,安南區預售屋',
    'image' => 'https://jiazhanah.tw/og.jpg'
];

$docTitle = $data['title'];
$siteName = $data['title'];
$docDesc = $data['description'];
$keyWords = $data['keyword'];
$ogType = 'website';
$shareUrl = $data['src'];
$shareImg = $data['image'];
?>

<title><?php echo $docTitle; ?></title>
<meta name="description" content="<?php echo $docDesc ?>">
<meta name="keywords" content="<?php echo $keyWords ?>">
<link rel="canonical" href="<?php echo $shareUrl; ?>">

<!-- Open Graph -->
<meta property="og:locale" content="zh_TW" />
<meta property="og:type" content="<?php echo $ogType ?>" />
<meta property="og:title" content="<?php echo $docTitle; ?>" />
<meta property="og:description" content="<?php echo $docDesc ?>" />
<meta property="og:site_name" content="<?php echo $siteName; ?>" />
<meta property="og:url" content="<?php echo $shareUrl; ?>" />
<meta property="og:image" content="<?php echo $shareImg; ?>" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?php echo $docTitle; ?>" />
<meta name="twitter:description" content="<?php echo $docDesc ?>" />
<meta name="twitter:image" content="<?php echo $shareImg; ?>" />

<!-- Schema.org -->
<meta itemprop="name" content="<?php echo $docTitle; ?>">
<meta itemprop="description" content="<?php echo $docDesc ?>">
<meta itemprop="image" content="<?php echo $shareImg; ?>">
