<?php
  ////////////////////////////////////////////////////////////
  // 2005-2008 (C) �������� �.�., �������� �.�.
  // PHP. �������� �������� Web-������
  // IT-������ SoftTime 
  // http://www.softtime.ru   - ������ �� Web-����������������
  // http://www.softtime.biz  - ������������ ������
  // http://www.softtime.mobi - ��������� �������
  // http://www.softtime.org  - �������������� �������
  ////////////////////////////////////////////////////////////
  // ���������� ������� ��������� ������ 
  // (http://www.softtime.ru/info/articlephp.php?id_article=23)
  error_reporting(E_ALL & ~E_NOTICE);

  ////////////////////////////////////////////////////////////
  // ������� ���� � �������������� ���������� hidden
  ////////////////////////////////////////////////////////////

  class field_hidden_int extends field_hidden
  {
    // �����, ����������� ������������ ���������� ������
    function check()
    {
      if($this->is_required)
      {
        // ���� ����������� � ����������
        if(!preg_match("|^[\d]+$|",$this->value))
        {
          return "������� ���� ������ ���� ����� ������";
        }
      }
      // ���� �� ����������� � ����������
      if(!preg_match("|^[\d]*$|",$this->value))
      {
        return "������� ���� ������ ���� ����� ������";
      }

      return "";
    }
  }
?>