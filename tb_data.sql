PGDMP                         {            aidil    13.11    13.11     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16394    aidil    DATABASE     e   CREATE DATABASE aidil WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_Indonesia.1252';
    DROP DATABASE aidil;
                postgres    false            �            1259    16395    tb_data    TABLE     ~   CREATE TABLE public.tb_data (
    nis integer NOT NULL,
    nama character varying(250),
    alamat text,
    telepon text
);
    DROP TABLE public.tb_data;
       public         heap    postgres    false            �          0    16395    tb_data 
   TABLE DATA           =   COPY public.tb_data (nis, nama, alamat, telepon) FROM stdin;
    public          postgres    false    200          �   Z   x��1� �����  {��[�ِ@�P`���� �:��)���KJ,PR��B��׋:�!F/z*t�#����J��Y�33d��     