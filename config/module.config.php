<?php

return array(
    'factory' => array(
        'Grid\Paragraph\Model\Paragraph\StructureFactory' => array(
            'adapter' => array(
                'contentList'   => 'Grid\ContentList\Model\Paragraph\Structure\ContentList',
            ),
        ),
    ),
    'modules' => array(
        'Grid\Paragraph' => array(
            'customizeMapForms' => array(
                'contentList'   => array(
                    'element'   => 'general',
                    'leadImage' => 'image',
                ),
            ),
        ),
    ),
    'form' => array(
        'Grid\Paragraph\CreateWizard\Start' => array(
            'elements'  => array(
                'type'  => array(
                    'spec'  => array(
                        'options'   => array(
                            'options'   => array(
                                'functions'     => array(
                                    'options'   => array(
                                        'contentList'   => 'paragraph.type.contentList',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'Grid\Paragraph\Meta\Edit' => array(
            'fieldsets' => array(
                'contentList' => array(
                    'spec'    => array(
                        'name'      => 'contentList',
                        'options'   => array(
                            'label'     => 'paragraph.type.contentList',
                            'required'  => false,
                        ),
                        'elements'  => array(
                            'name'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Text',
                                    'name'      => 'name',
                                    'options'   => array(
                                        'label'     => 'paragraph.form.abstract.name',
                                        'required'  => false,
                                    ),
                                ),
                            ),
                            'mode'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Select',
                                    'name'      => 'mode',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.mode',
                                        'required'  => false,
                                        'options'   => array(
                                            'some'  => 'contentList.paragraph.form.mode.some',
                                            'all'   => 'contentList.paragraph.form.mode.all',
                                        ),
                                    ),
                                ),
                            ),
                            'itemCount' => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Number',
                                    'name'      => 'itemCount',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.itemCount',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'value'     => 10,
                                        'min'       => 1,
                                    ),
                                ),
                            ),
                            'displayUser' => array(
                                'spec' => array(
                                    'type'      => 'Zork\Form\Element\Checkbox',
                                    'name'      => 'displayUser',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.displayUser',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'checked'   => true,
                                    ),
                                ),
                            ),
                            'displayCreated' => array(
                                'spec' => array(
                                    'type'      => 'Zork\Form\Element\Checkbox',
                                    'name'      => 'displayCreated',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.displayCreated',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'checked'   => true,
                                    ),
                                ),
                            ),
                            'displayLeadImage' => array(
                                'spec' => array(
                                    'type'      => 'Zork\Form\Element\Checkbox',
                                    'name'      => 'displayLeadImage',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.displayLeadImage',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'checked'   => true,
                                    ),
                                ),
                            ),
                            'displayLeadText' => array(
                                'spec' => array(
                                    'type'      => 'Zork\Form\Element\Checkbox',
                                    'name'      => 'displayLeadText',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.displayLeadText',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'checked'   => true,
                                    ),
                                ),
                            ),
                            'displayReadMore' => array(
                                'spec' => array(
                                    'type'      => 'Zork\Form\Element\Checkbox',
                                    'name'      => 'displayReadMore',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.displayReadMore',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'checked'   => true,
                                    ),
                                ),
                            ),
                            'tags' => array(
                                'spec' => array(
                                    'type'      => 'Grid\Tag\Form\Element\TagList',
                                    'name'      => 'tags',
                                    'options'   => array(
                                        'label'     => 'contentList.paragraph.form.tags',
                                        'required'  => false,
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'translator' => array(
        'translation_file_patterns' => array(
            'contentList' => array(
                'type'          => 'phpArray',
                'base_dir'      => __DIR__ . '/../languages/contentList',
                'pattern'       => '%s.php',
                'text_domain'   => 'contentList',
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'grid/paragraph/render/contentList'  => __DIR__ . '/../view/grid/paragraph/render/contentList.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
