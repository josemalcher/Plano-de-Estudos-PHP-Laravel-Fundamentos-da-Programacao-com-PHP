<?php

function getAlbums()
{
    return glob('albums/*');
}

function getMusic($album)
{
    return glob("albums/{$album}/musics/*.mp3");
}