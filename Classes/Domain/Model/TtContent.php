<?php

namespace Jp\Jpfaq\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Model of tt_content
 */
class TtContent extends AbstractEntity
{
    /**
     * @var \DateTime
     */
    protected $crdate;

    /**
     * @var \DateTime
     */
    protected $tstamp;

    /**
     * @var string
     */
    protected $CType = '';

    /**
     * @var string
     */
    protected $header = '';

    /**
     * @var string
     */
    protected $headerPosition = '';

    /**
     * @var string
     */
    protected $bodytext = '';

    /**
     * @var int
     */
    protected $colPos = 0;

    /**
     * @var string
     */
    protected $image = '';

    /**
     * @var int
     */
    protected $imagewidth = 0;

    /**
     * @var int
     */
    protected $imageorient = 0;

    /**
     * @var string
     */
    protected $imagecaption = '';

    /**
     * @var int
     */
    protected $imagecols = 0;

    /**
     * @var int
     */
    protected $imageborder = 0;

    /**
     * @var string
     */
    protected $media = '';

    /**
     * @var string
     */
    protected $layout = '';

    /**
     * @var int
     */
    protected $cols = 0;

    /**
     * @var string
     */
    protected $subheader = '';

    /**
     * @var string
     */
    protected $headerLink = '';

    /**
     * @var string
     */
    protected $imageLink = '';

    /**
     * @var string
     */
    protected $imageZoom = '';

    /**
     * @var string
     */
    protected $altText = '';

    /**
     * @var string
     */
    protected $titleText = '';

    /**
     * @var string
     */
    protected $headerLayout = '';

    /**
     * @var string
     */
    protected $listType = '';

    /**
     * @return null|\DateTime
     */
    public function getCrdate(): ?\DateTime
    {
        return $this->crdate;
    }

    /**
     * @param \DateTime $crdate
     *
     * @return void
     */
    public function setCrdate($crdate): void
    {
        $this->crdate = $crdate;
    }

    /**
     * @return null|\DateTime
     */
    public function getTstamp(): ?\DateTime
    {
        return $this->tstamp;
    }

    /**
     * @param \DateTime $tstamp
     *
     * @return void
     */
    public function setTstamp($tstamp): void
    {
        $this->tstamp = $tstamp;
    }

    /**
     * @return string
     */
    public function getCType(): string
    {
        return $this->CType;
    }

    /**
     * @param string $ctype
     *
     * @return void
     */
    public function setCType(string $ctype): void
    {
        $this->CType = $ctype;
    }

    /**
     * @return string
     */
    public function getHeader(): string
    {
        return $this->header;
    }

    /**
     * @param string $header
     *
     * @return void
     */
    public function setHeader(string $header): void
    {
        $this->header = $header;
    }

    /**
     * @return string
     */
    public function getHeaderPosition(): string
    {
        return $this->headerPosition;
    }

    /**
     * @param string $headerPosition
     *
     * @return void
     */
    public function setHeaderPosition(string $headerPosition): void
    {
        $this->headerPosition = $headerPosition;
    }

    /**
     * @return string
     */
    public function getBodytext(): string
    {
        return $this->bodytext;
    }

    /**
     * @param string $bodytext
     *
     * @return void
     */
    public function setBodytext(string $bodytext): void
    {
        $this->bodytext = $bodytext;
    }

    /**
     * Get the colpos
     *
     * @return int
     */
    public function getColPos(): int
    {
        return (int)$this->colPos;
    }

    /**
     * Set colpos
     *
     * @param int $colPos
     *
     * @return void
     */
    public function setColPos($colPos): void
    {
        $this->colPos = $colPos;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     *
     * @return void
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getImagewidth(): int
    {
        return $this->imagewidth;
    }

    /**
     * @param int $imagewidth
     *
     * @return void
     */
    public function setImagewidth(int $imagewidth): void
    {
        $this->imagewidth = $imagewidth;
    }

    /**
     * @return int
     */
    public function getImageorient(): int
    {
        return $this->imageorient;
    }

    /**
     * @param int $imageorient
     *
     * @return void
     */
    public function setImageorient(int $imageorient): void
    {
        $this->imageorient = $imageorient;
    }

    /**
     * @return string
     */
    public function getImagecaption(): string
    {
        return $this->imagecaption;
    }

    /**
     * @param string $imagecaption
     *
     * @return void
     */
    public function setImagecaption(string $imagecaption): void
    {
        $this->imagecaption = $imagecaption;
    }

    /**
     * @return int
     */
    public function getImagecols(): int
    {
        return $this->imagecols;
    }

    /**
     * @param int $imagecols
     *
     * @return void
     */
    public function setImagecols(int $imagecols): void
    {
        $this->imagecols = $imagecols;
    }

    /**
     * @return int
     */
    public function getImageborder(): int
    {
        return $this->imageborder;
    }

    /**
     * @param int $imageborder
     *
     * @return void
     */
    public function setImageborder(int $imageborder): void
    {
        $this->imageborder = $imageborder;
    }

    /**
     * @return string
     */
    public function getMedia(): string
    {
        return $this->media;
    }

    /**
     * @param string $media
     *
     * @return void
     */
    public function setMedia(string $media): void
    {
        $this->media = $media;
    }

    /**
     * @return string
     */
    public function getLayout(): string
    {
        return $this->layout;
    }

    /**
     * @param string $layout
     *
     * @return void
     */
    public function setLayout(string $layout): void
    {
        $this->layout = $layout;
    }

    /**
     * @return int
     */
    public function getCols(): int
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     *
     * @return void
     */
    public function setCols(int $cols): void
    {
        $this->cols = $cols;
    }

    /**
     * @return string
     */
    public function getSubheader(): string
    {
        return $this->subheader;
    }

    /**
     * @param string $subheader
     *
     * @return void
     */
    public function setSubheader(string $subheader): void
    {
        $this->subheader = $subheader;
    }

    /**
     * @return string
     */
    public function getHeaderLink(): string
    {
        return $this->headerLink;
    }

    /**
     * @param string $headerLink
     *
     * @return void
     */
    public function setHeaderLink(string $headerLink): void
    {
        $this->headerLink = $headerLink;
    }

    /**
     * @return string
     */
    public function getImageLink(): string
    {
        return $this->imageLink;
    }

    /**
     * @param string $imageLink
     *
     * @return void
     */
    public function setImageLink(string $imageLink): void
    {
        $this->imageLink = $imageLink;
    }

    /**
     * @return string
     */
    public function getImageZoom(): string
    {
        return $this->imageZoom;
    }

    /**
     * @param string $imageZoom
     *
     * @return void
     */
    public function setImageZoom(string $imageZoom): void
    {
        $this->imageZoom = $imageZoom;
    }

    /**
     * @return string
     */
    public function getAltText(): string
    {
        return $this->altText;
    }

    /**
     * @param string $altText
     *
     * @return void
     */
    public function setAltText(string $altText): void
    {
        $this->altText = $altText;
    }

    /**
     * @return string
     */
    public function getTitleText(): string
    {
        return $this->titleText;
    }

    /**
     * @param string $titleText
     *
     * @return void
     */
    public function setTitleText(string $titleText): void
    {
        $this->titleText = $titleText;
    }

    /**
     * @return string
     */
    public function getHeaderLayout(): string
    {
        return $this->headerLayout;
    }

    /**
     * @param string $headerLayout
     *
     * @return void
     */
    public function setHeaderLayout(string $headerLayout): void
    {
        $this->headerLayout = $headerLayout;
    }

    /**
     * @return string
     */
    public function getListType(): string
    {
        return $this->listType;
    }

    /**
     * @param string $listType
     * @return void
     */
    public function setListType(string $listType):   void
    {
        $this->listType = $listType;
    }
}
