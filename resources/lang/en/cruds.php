<?php

return [
    'permission'     => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Title',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Title',
            'title_helper'       => '',
            'permissions'        => 'Permissions',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'userManagement' => [
        'title'          => 'User Management',
        'title_singular' => 'User Management',
    ],

    'user'           => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Name',
            'name_helper'              => '',
            'email'                    => 'Email',
            'email_helper'             => '',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => '',
            'password'                 => 'Password',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],

'libraryManagement' => [
        'library'          => 'Library Management',
        'library_singular' => 'Library Management',
        'libinpost'          => 'Library Informations',
        'libinpost_singular' => 'Library Informations',
    ],

    'book'           => [
        'title'          => 'Book',
        'title_singular' => 'Book',
        'fields'         => [
            'id'                              => 'ID',
            'id_helper'                       => '',
            'title'                           => 'Title',
            'title_helper'                    => '',
            'series_title'                    => 'Series Title',
            'series_title_helper'             => '',
            'call_number'                     => 'Call Number',
            'call_number_helper'              => '',
            'publisher'                       => 'Publisher',
            'publisher_helper'                => '',
            'collation'                       => 'Collation',
            'collation_helper'                => '',
            'language'                        => 'Language',
            'language_helper'                 => '',
            'isbn_issn'                       => 'Isbn Issn',
            'isbn_issn_helper'                => '',
            'classification'                  => 'Classification',
            'classification_helper'           => '',
            'content_type'                    => 'Content Type',
            'content_type_helper'             => '',
            'media_type'                      => 'Media Type',
            'media_type_helper'               => '',
            'carrier_type'                    => 'Carrier Type',
            'carrier_type_helper'             => '',
            'edition'                         => 'Edition',
            'edition_helper'                  => '',
            'subject'                         => 'Subject',
            'subject_helper'                  => '',
            'specific_detail_info'            => 'Specific Detail Info',
            'specific_detail_info_helper'     => '',
            'statement_responsibility'        => 'Statement Responsibility',
            'statement_responsibility_helper' => '',
            'description'                     => 'Description',
            'description_helper'              => '',
            'cover_image'                     => 'Cover Image',
            'cover_image_helper'              => '',
            'category'                        => 'Category',
            'category_helper'                 => '',
            'created_at'                      => 'Created at',
            'created_at_helper'               => '',
            'updated_at'                      => 'Updated at',
            'updated_at_helper'               => '',
            'deleted_at'                      => 'Deleted at',
            'deleted_at_helper'               => '',
        ],
    ],

    'Category'       => [
        'title'          => 'Book Category',
        'title_singular' => 'Book Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Book Category Name',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'author'         => [
        'title'          => 'Author',
        'title_singular' => 'Author',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Author Name',
            'name_helper'       => '',
            'author_bio'        => 'Author Bio',
            'author_bio_helper' => '',
            'book'              => 'Book',
            'book_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],

    'member'     => [
        'title'          => 'SBA-M Library Member',
        'title_singular' => 'Library Member',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'studentname'                => 'Name',
            'category_helper'         => '',
            
            'student'                => 'Student_ID',
            'student_helper'         => '',
            'phone'                => 'Phone',
            'phone_helper'         => '',
            'email'                => 'Email',
            'email_helper'         => '',
            'image'                => 'User Image',
            'image_helper'         => '',

            'created_at'        => 'Start_Date',
            'created_at_helper' => '',
            'due'        => 'Due_Date',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
     'rent'     => [
        'title'          => 'SBA-M Library Rent',
        'title_singular' => 'Library Rent',
        'returnbook'     => 'SBA-M Library Returned Book',
        'returnbook_singular' => 'Return Book',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'addrent'                => 'Add Rent Book',
            'id_helper'         => '',
            'addreturn'                => 'Add Return Book',
            'id_helper'         => '',
            'rentname'                => 'Member Name',
            'rentname_helper'         => '',
            
            'libraryid'                => 'Book Name',
            'libraryid_helper'         => '',

            'created_at'        => 'Start_Date',
            'created_at_helper' => '',
            'due'        => 'Due_Date',
            'due_helper' => '',
            'returner'        => 'Returned_Date',
            'returner_helper' => '',
            'remark'        => 'Remark',
            'remark_helper' => '',

            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'post'     => [
        'title'          => 'SBA-M Library Rent',
        'title_singular' => 'Library Information Post',
        'pebook'          => 'SBA-M Library Ebook',
        'pebook_singular' => 'SBA-M Library Ebook',
        'returnbook'     => 'SBA-M / Library Information Post',
        'returnbook_singular' => 'SBA-M / Library Information Post',
        'newpost'     => 'Add Information Post',
        'newpost_singular' => 'SBA-M / Library Information Post',
        'newpdf'     => 'Add Information Post',
        'newpdf_singular' => 'SBA-M / Library Ebook Post',

        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'status'            => 'Post Status',
            'status_helper'            => '',
            'addpost'                => 'Add New Post',
            'addpost_helper'         => '',
            'posttitle'                => 'Post Title',
            'posttitle_helper'         => '',
            'des'                => 'Ebook Description',
            'des_helper'         => '',
            'ebcover'                => 'Ebook',
            'ebcover_helper'         => '',
            'ebooktitle'                => 'Ebook Name',
            'ebooktitle_helper'         => '',
            'libpostcategory'                => 'Post Category',
            'posttitle_helper'         => '',
            'pdfcategory'                => 'Ebook Category',
            'pdfcategory_helper'         => '',
            'postname'                => 'Library Post',
            'postname_helper'         => '',
            'img'                => 'Post Image',
            'img_helper'         => '',
            
            'libraryid'                => 'Book Name',
            'libraryid_helper'         => '',

            'created_at'        => 'Created_At',
            'created_at_helper' => '',
            'due'        => 'Due_Date',
            'due_helper' => '',
            'returner'        => 'Return_Date',
            'returner_helper' => '',
            'remark'        => 'Remark',
            'remark_helper' => '',

            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];
