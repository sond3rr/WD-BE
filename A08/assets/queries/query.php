<?php
// FAMILY
$islandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 1";
$islandResult = executeQuery($islandQuery);

if ($islandResult && mysqli_num_rows($islandResult) > 0) {
  $island = mysqli_fetch_assoc($islandResult);
  $name = $island['name'];
  $shortDescription = $island['shortDescription'];
  $longDescription = $island['longDescription'];
}

$islandContentQuery = "SELECT * FROM islandsofpersonality LEFT JOIN islandcontents ON 
islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = 1";
$islandContentResult = executeQuery($islandContentQuery);

if ($islandContentResult && mysqli_num_rows($islandContentResult) > 0) {

  $content1 = mysqli_fetch_assoc($islandContentResult);
  $content1Text = $content1['content'];
  $content1Image = $content1['image'];

  $content2 = mysqli_fetch_assoc($islandContentResult);
  $content2Text = $content2['content'];
  $content2Image = $content2['image'];

  $content3 = mysqli_fetch_assoc($islandContentResult);
  $content3Text = $content3['content'];
  $content3Image = $content3['image'];

  $content4 = mysqli_fetch_assoc($islandContentResult);
  $content4Text = $content4['content'];
  $content4Image = $content4['image'];
}


// DOG
$dogIslandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 2";
$dogIslandResult = executeQuery($dogIslandQuery);

if ($dogIslandResult && mysqli_num_rows($dogIslandResult) > 0) {
  $dogIsland = mysqli_fetch_assoc($dogIslandResult);
  $dogName = $dogIsland['name'];
  $dogShortDescription = $dogIsland['shortDescription'];
  $dogLongDescription = $dogIsland['longDescription'];
}

$dogIslandContentQuery = "SELECT * FROM islandsofpersonality LEFT JOIN islandcontents ON 
islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = 2";
$dogIslandContentResult = executeQuery($dogIslandContentQuery);

if ($dogIslandContentResult && mysqli_num_rows($dogIslandContentResult) > 0) {

  $dogContent1 = mysqli_fetch_assoc($dogIslandContentResult);
  $dogContent1Text = $dogContent1['content'];
  $dogContent1Image = $dogContent1['image'];

  $dogContent2 = mysqli_fetch_assoc($dogIslandContentResult);
  $dogContent2Text = $dogContent2['content'];
  $dogContent2Image = $dogContent2['image'];

  $dogContent3 = mysqli_fetch_assoc($dogIslandContentResult);
  $dogContent3Text = $dogContent3['content'];
  $dogContent3Image = $dogContent3['image'];

  $dogContent4 = mysqli_fetch_assoc($dogIslandContentResult);
  $dogContent4Text = $dogContent4['content'];
  $dogContent4Image = $dogContent4['image'];
}


// GF
$gfIslandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 3";
$gfIslandResult = executeQuery($gfIslandQuery);

if ($gfIslandResult && mysqli_num_rows($gfIslandResult) > 0) {
  $gfIsland = mysqli_fetch_assoc($gfIslandResult);
  $gfName = $gfIsland['name'];
  $gfShortDescription = $gfIsland['shortDescription'];
  $gfLongDescription = $gfIsland['longDescription'];
}

$gfIslandContentQuery = "SELECT * FROM islandsofpersonality LEFT JOIN islandcontents ON 
islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = 3";
$gfIslandContentResult = executeQuery($gfIslandContentQuery);

if ($gfIslandContentResult && mysqli_num_rows($gfIslandContentResult) > 0) {

  $gfContent1 = mysqli_fetch_assoc($gfIslandContentResult);
  $gfContent1Text = $gfContent1['content'];
  $gfContent1Image = $gfContent1['image'];

  $gfContent2 = mysqli_fetch_assoc($gfIslandContentResult);
  $gfContent2Text = $gfContent2['content'];
  $gfContent2Image = $gfContent2['image'];

  $gfContent3 = mysqli_fetch_assoc($gfIslandContentResult);
  $gfContent3Text = $gfContent3['content'];
  $gfContent3Image = $gfContent3['image'];

  $gfContent4 = mysqli_fetch_assoc($gfIslandContentResult);
  $gfContent4Text = $gfContent4['content'];
  $gfContent4Image = $gfContent4['image'];
}


// GAMING
$gameIslandQuery = "SELECT * FROM islandsofpersonality WHERE islandOfPersonalityID = 4";
$gameIslandResult = executeQuery($gameIslandQuery);

if ($gameIslandResult && mysqli_num_rows($gameIslandResult) > 0) {
  $gameIsland = mysqli_fetch_assoc($gameIslandResult);
  $gameName = $gameIsland['name'];
  $gameShortDescription = $gameIsland['shortDescription'];
  $gameLongDescription = $gameIsland['longDescription'];
}

$gameIslandContentQuery = "SELECT * FROM islandsofpersonality LEFT JOIN islandcontents ON 
islandsofpersonality.islandOfPersonalityID = islandcontents.islandOfPersonalityID WHERE islandsofpersonality.islandOfPersonalityID = 4";
$gameIslandContentResult = executeQuery($gameIslandContentQuery);

if ($gameIslandContentResult && mysqli_num_rows($gameIslandContentResult) > 0) {

  $gameContent1 = mysqli_fetch_assoc($gameIslandContentResult);
  $gameContent1Text = $gameContent1['content'];
  $gameContent1Image = $gameContent1['image'];

  $gameContent2 = mysqli_fetch_assoc($gameIslandContentResult);
  $gameContent2Text = $gameContent2['content'];
  $gameContent2Image = $gameContent2['image'];

  $gameContent3 = mysqli_fetch_assoc($gameIslandContentResult);
  $gameContent3Text = $gameContent3['content'];
  $gameContent3Image = $gameContent3['image'];

  $gameContent4 = mysqli_fetch_assoc($gameIslandContentResult);
  $gameContent4Text = $gameContent4['content'];
  $gameContent4Image = $gameContent4['image'];
}
?>