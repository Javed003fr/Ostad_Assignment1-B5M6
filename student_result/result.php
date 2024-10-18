<?php

function calculateResult($marks)
{
  foreach ($marks as $mark) {
    if ($mark < 0 || $mark > 100) {
      return "Mark range is invalid.";
    }
  }

  foreach ($marks as $mark) {
    if ($mark < 33) {
      return "Student has failed.";
    }
  }

  $totalMarks = array_sum($marks);
  $avarageMarks = $totalMarks / count($marks);

  switch (true) {
    case ($avarageMarks >= 80 && $avarageMarks <= 100):
      $grade = 'A+';
      break;
    case ($avarageMarks >= 70 && $avarageMarks <= 80):
      $grade = 'A';
      break;
    case ($avarageMarks >= 60 && $avarageMarks <= 70):
      $grade = 'A-';
      break;
    case ($avarageMarks >= 50 && $avarageMarks <= 60):
      $grade = 'A';
      break;
    case ($avarageMarks >= 40 && $avarageMarks <= 50):
      $grade = 'C';
      break;
    case ($avarageMarks >= 33 && $avarageMarks <= 40):
      $grade = 'D';
      break;
    default:
      $grade = 'F';
      break;
  }

  return [
    'totalMarks' => $totalMarks,
    'averageMarks' => round($avarageMarks, 2),
    'grade' => $grade
  ];
}

$marks = [85, 78, 92, 67, 45];
$result = calculateResult($marks);

if(is_string($result)) {
  echo $result;
} else {
  echo "Total Marks: " . $result['totalMarks']."\n";
  echo "Avarage Marks: " . $result['averageMarks']."\n";
  echo "Grade: " . $result['grade']."\n";
}

?>