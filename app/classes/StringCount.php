<?php
namespace App\classes;

class StringCount
{
//    function calculateStringLen( $data ){
//        $givenString = $data['given_string'];
//         $stringLen = strlen( $givenString );
//         return $stringLen;
//    }
//    function calculateStringChar( $data ){
//        $givenString = $data['given_string'];
//         $stringLen = str_word_count( $givenString );
//         return $stringLen;
//    }

    function calculateString( $data ){

        $givenString = $data['given_string'];
        $stringLen = strlen( $givenString );
        $wordCount = str_word_count( $givenString );
        $result =[
            'total_char' => $stringLen,
            'total_word' => $wordCount
        ];
        return $result;
    }


}
?>