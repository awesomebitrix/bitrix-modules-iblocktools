<?php 

$aMenu[] = array(
    "parent_menu" => "global_menu_services",
    "sort" => "5",
    "text" => 'Настройки инфоблоков',
    "title" => 'Настройки инфоблоков',
    "icon" => "iblocktools_menu_icon",
    "page_icon" => "iblocktools_menu_icon",
    "items_id" => "iblocktools_main",
    "url" => "iblocktools.php",
    "items" => array(
        array(
            "text" => 'Элементы',
            "title" => 'Элементы',
            "items_id" => "iblocktools_elements",
            "items" => array(
                array(
                    "text" => 'Генерация символьных кодов',
                    "title" => 'Генерация символьных кодов',
                    "items_id" => "iblocktools_elements_codes",
                    "url" => "iblocktools_add_elements_codes.php",
                ), 
                array(
                    "text" => 'Массовые действия над полями',
                    "title" => 'Массовые действия над полями',
                    "items_id" => "iblocktools_elements_mass_action",
                    "url" => "iblocktools_elements_mass_action.php",
                )
            )
        ),
        array(
            "text" => 'Свойства элементов',
            "title" => 'Свойства элементов',
            "items_id" => "iblocktools_props",
            "items" => array(
                array(
                    "text" => 'Строковые свойства в список',
                    "title" => 'Строковые свойства в список',
                    "items_id" => "iblocktools_props",
                    "url" => "iblocktools_strptops_to_list.php",
                ),
                array(
                    "text" => 'Массовое создание свойств',
                    "title" => 'Массовое создание свойств',
                    "items_id" => "iblocktools_massproperties",
                    "url" => "iblocktools_massproperties.php",
                )
            )
        ),
        array(
            "text" => 'Разделы',
            "title" => 'Разделы',
            "items_id" => "iblocktools_sections",
            "items" => array(
                array(
                    "text" => 'Генерация символьных кодов',
                    "title" => 'Генерация символьных кодов',
                    "items_id" => "iblocktools_sections_codes",
                    "url" => "iblocktools_add_section_codes.php",
                )
            )
        ),
        array(
            "text" => 'Инфоблоки',
            "title" => 'Инфоблоки',
            "items_id" => "iblocktools_iblock",
            "items" => array(
                array(
                    "text" => 'Изменение типа инфоблока',
                    "title" => 'Изменение типа инфоблока',
                    "items_id" => "iblocktools_change_iblock_type",
                    "url" => "iblocktools_change_iblock_type.php",
                ),   
            )
        ),    
        array(
            "text" => 'Типы инфоблоков',
            "title" => 'Типы инфоблоков',
            "items_id" => "iblocktools_iblocktypes",
            "items" => array( 
                array(
                    "text" => 'Изменение кода типу инфоблока',
                    "title" => 'Изменение кода типу инфоблока',
                    "items_id" => "iblocktools_change_iblock_type_code",
                    "url" => "iblocktools_change_iblock_type_code.php",
                ),  
            )
        ),
    )
);

return $aMenu;
