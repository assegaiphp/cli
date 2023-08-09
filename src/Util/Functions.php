<?php

/**
 * Checks if the given filename is a phar file.
 *
 * @param string $filename The filename to check.
 * @return bool Returns true if the filename is a phar file.
 */
function is_phar(string $filename): bool
{
  try
  {
    $phar = new Phar($filename);
  }
  catch (Exception $e)
  {
    return false;
  }

  return true;
}

/**
 * Checks if the given path is a phar path. This is a path that starts with 'phar://'.
 *
 * @param string $path The path to check.
 * @return bool Returns true if the path is a phar path.
 */
function is_phar_path(string $path): bool
{
  return str_starts_with($path, 'phar://');
}

/* === File System Functions === */
/**
 *
 *
 * @param string $directoryPath
 * @return bool
 */
function delete_directory(string $directoryPath): bool
{
  if (! is_dir($directoryPath) )
  {
    return false;
  }

  $files = scandir($directoryPath);

  foreach ($files as $file)
  {
    if ($file === '.' || $file === '..')
    {
      continue;
    }

    if (is_dir("$directoryPath/$file"))
    {
      delete_directory("$directoryPath/$file");
    }
    else
    {
      unlink("$directoryPath/$file");
    }
  }

  return rmdir($directoryPath);
}